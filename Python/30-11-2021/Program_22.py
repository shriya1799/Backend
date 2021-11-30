str_val = "PYnAtivE"
print('Original String:', str_val)
lower = []
upper = []
for char in str_val:
    if char.islower():
        lower.append(char)
    else:
        upper.append(char)

result = ''.join(lower + upper)
print('Result:', result)