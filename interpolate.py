import pandas as pd

data = pd.read_csv('path to csv data',index_col=['id'])

print data
data2 = data.interpolate(method='linear', axis=0).ffill().bfill()
print data2
data2.to_csv('path to output')
print ("finished writing file")
    
