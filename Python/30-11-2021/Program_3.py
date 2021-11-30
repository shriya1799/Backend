def check_first_last_same(number_List):
    print("Given list:", number_List)
    
    first_num = number_List[0]
    last_num = number_List[-1]
    
    if first_num == last_num:
        return True
    else:
        return False

value_1 = [99, 20, 30, 40, 99]
print("result is", check_first_last_same(value_1))

value_2 = [89, 65, 35, 75, 25]
print("result is", check_first_last_same(value_2))