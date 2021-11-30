def merge_list(list_1, list_2):
    result_val = []
    
    for num in list_1:
        if num % 2 != 0:
            result_val.append(num)
    
    for num in list_2:
        if num % 2 == 0:
            result_val.append(num)
    return result_val

list_1 = [10, 20, 25, 30, 35]
list_2 = [40, 45, 60, 75, 90]
print("result list:", merge_list(list_1, list_2))