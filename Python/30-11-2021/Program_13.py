list_val = ["a", "b", ["c", ["d", "e", ["f", "g"], "k"], "l"], "m", "n"]
sub_list = ["h", "i", "j"]

list_val[2][1][2].extend(sub_list)
print(list_val)
