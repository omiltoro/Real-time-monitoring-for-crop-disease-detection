import pandas as pd

data = pd.read_csv('C:\Users\Patrick\Desktop\Nakuru_pAT.csv')
data2 = data.copy()
data2_index = 0
print (data2)

for index , row in data.iterrows():
    #Set the current value of the number and the next value in the list

    current_value = data['hour'][index]
    next_value = data['hour'][min(max(0,index + 1),data['hour'].size-1)]

    #Write in the value as per normal if the following value is the same

    if current_value + 1 == next_value or current_value == next_value + 3 or index == 0 or current_value == 23:
        data2.loc[data2_index] = data.loc[index]
        data2_index = data2_index + 1
    else:

        #Otherwise, add in new rows till we get to the value in the next row in the original df
        if next_value < current_value:
            current_value = 0
        target_value = next_value - 1 
        data2.loc[data2_index] = data.loc[index]
        data2_index = data2_index + 1
        for x in range(current_value+1,target_value+1):
            data2.loc[data2_index] = ['Nakuru','y','m','d',x,'','']
            data2_index = data2_index + 1

            print (data2)
            data2.to_csv('C:\Users\Patrick\Desktop\example16c.csv')
          
