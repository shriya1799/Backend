str_val = "Apple"

char_dict = dict()

for char in str_val:
    count = str_val.count(char)
    char_dict[char] = count
print('Result:', char_dict)
