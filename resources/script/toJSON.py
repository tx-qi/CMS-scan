import json
import re
import os

print(os.getcwd())
fff = open("aput.txt", "r")
countLow = 0
countMed = 0
countHigh = 0
countTotal = 0
lowVuln = []
medVuln = []
highVuln = []
cmsInfo = []

c = fff.readlines()

for i in c:
    line = i[3::].strip()

    if i[1] == "L":
        lowVuln.append(line)
        countLow += 1

    elif i[1] == "M":
        medVuln.append(line)
        countMed += 1

    elif i[1] == "H":
        highVuln.append(line)
        countHigh += 1

    elif i[1] == "I":
        cmsInfo.append(line)

countTotal= countLow + countMed + countHigh

data = {'data': [{'Low-vulnerability': lowVuln, 'Medium-vulnerability': medVuln, 'High-vulnerability': highVuln, 'Cms-info': cmsInfo, 'countLow': countLow, 'countMed': countMed, 'countHigh': countHigh, 'countTotal': countTotal}]}
jsondata = json.dumps(data, indent=4)

fName = c[0]
a = fName.split()

filename = a[1]
url = re.compile(r"https?://(www\.)?")

filenames = url.sub('', filename).strip().strip('/')
filenames = filenames + ".json"
filepath = '../scanJSON'
completeName=os.path.join(filepath, filenames)

# fff = open(completeName,"w+")
fff = open(completeName,"w+")
fff.write(jsondata)
fff.close()
