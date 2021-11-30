sampleDict = { 
  "name": "Kelly",
  "age":25, 
  "salary": 8000, 
  "city": "New york" }

keys = ["name", "salary"]

dict_value = {x: sampleDict[x] for x in keys}
print(dict_value)