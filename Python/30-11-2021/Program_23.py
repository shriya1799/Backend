s1 = "Abc"
s2 = "Xyz"

s1_length = len(s1)
s2_length = len(s2)

length = s1_length if s1_length > s2_length else s2_length
result_val = ""

s2 = s2[::-1]

for i in range(length):
    if i < s1_length:
        result_val = result_val + s1[i]
    if i < s2_length:
        result_val = result_val + s2[i]

print(result_val)
