import sys
import string
import re
from nltk import text

from nltk.tokenize import word_tokenize
from nltk.corpus import stopwords
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory



sentence = ' '.join([str(item) for item in sys.argv[1:]])
lowercase_sentence = sentence.lower()
lowercase_sentence = lowercase_sentence = re.sub(r"\d+", "", lowercase_sentence)
lowercase_sentence = lowercase_sentence.translate(str.maketrans("","",string.punctuation))
lowercase_sentence = lowercase_sentence.strip()
lowercase_sentence = re.sub('\s+',' ',lowercase_sentence)

token = word_tokenize(lowercase_sentence)

list_stopwords = set(stopwords.words('indonesian'))
tokens_without_stopword = [word for word in token if not word in list_stopwords]

factory = StemmerFactory()
stemmer = factory.create_stemmer()
token_list = tokens_without_stopword

output = [(stemmer.stem(token))for token in token_list]

string = ' '.join([str(item)for item in output])

print(string)