https://www.codewars.com/kata/55c04b4cc56a697bb0000048/train/python
////////////////////////////////////////////////////
def scramble(s1, s2):
    sorted_str1 = ''.join(sorted(s1))
    sorted_str2 = ''.join(sorted(s2))

    i, j = 0, 0

    while i < len(sorted_str1) and j < len(sorted_str2):
        if sorted_str1[i] == sorted_str2[j]:
            i += 1
            j += 1
        else:
            i += 1

    return j == len(sorted_str2)
