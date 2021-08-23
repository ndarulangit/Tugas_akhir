import string
import re
from nltk import text

from nltk.tokenize import word_tokenize
from nltk.corpus import stopwords
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory
from winnowing import winnowing_hash
from winnowing import winnow


sentence = "ndaru kerja projek tugas akhir aplikasi cek plagiarisme bahasa program php"

# gunakan fungsi .lower()
lowercase_sentence = sentence.lower()

print("hasil melakukakn lower \n")
print(lowercase_sentence, "\n")

lowercase_sentence = lowercase_sentence = re.sub(r"\d+", "", lowercase_sentence)
lowercase_sentence = lowercase_sentence.translate(str.maketrans("","",string.punctuation))
lowercase_sentence = lowercase_sentence.strip()
lowercase_sentence = re.sub('\s+',' ',lowercase_sentence)

token = word_tokenize(lowercase_sentence)

print("tokenizing result : \n")
print(token, "\n")

list_stopwords = set(stopwords.words('indonesian'))
tokens_without_stopword = [word for word in token if not word in list_stopwords]

print("hasil setelah stopword : \n")
print(tokens_without_stopword)

factory = StemmerFactory()
stemmer = factory.create_stemmer()
token_list = tokens_without_stopword

output = [(stemmer.stem(token))for token in token_list]
print(output)

string = ''.join([str(item)for item in output])

# print (string)

# for i in output:
#     print(winnow(i))

# print(winnow(string))

print(winnow(sentence, k=3))