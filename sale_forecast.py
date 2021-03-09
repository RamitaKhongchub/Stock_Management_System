#!/usr/bin/env python
# coding: utf-8

# In[4]:


#Import the libraries
import math

import numpy as np
import pandas as pd
from sklearn.preprocessing import MinMaxScaler

import matplotlib.pyplot as plt
plt.style.use('fivethirtyeight')


# In[8]:


uri ='NG_Percent.xlsx'
df = pd.read_excel(uri)
df


# In[9]:


#Visualize 
plt.figure(figsize=(16,8))
plt.title('Visualize')
plt.plot(df['NG_Percent'])
plt.xlabel('Date',fontsize=18)
plt.ylabel('NG_Percent',fontsize=18)
plt.show()


# In[12]:


#Create a new dataframe with only the 'NG_Percent' column
data = df.filter(['NG_Percent'])
#Converting the dataframe to a numpy array
dataset = data.values
#Get /Compute the number of rows to train the model on
training_data_len = math.ceil( len(dataset) *.8) 
    #Scale the all of the data to be values between 0 and 1 
scaler = MinMaxScaler(feature_range=(0, 1)) 
scaled_data = scaler.fit_transform(dataset)


# In[17]:


#Create the scaled training data set 
train_data = scaled_data[0:training_data_len  , : ]
#Split the data into x_train and y_train data sets
x_train=[]
y_train = []
for i in range(60,len(train_data)):
    x_train.append(train_data[i-60:i,0])
    y_train.append(train_data[i,0])
#Convert x_train and y_train to numpy arrays
x_train, y_train = np.array(x_train), np.array(y_train)
#Reshape the data into the shape accepted by the LSTM
x_train = np.reshape(x_train, (x_train.shape[0],x_train.shape[1],1))
#Build the LSTM network model





# In[3]:


get_ipython().system('pip install mysql-connector-python')


# In[8]:


import mysql.connector
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="project_inv"
)

print(mydb)
mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM material")

myresult = mycursor.fetchall()

for x in myresult:
  print(x)


# In[16]:


#Import the libraries
import math

import numpy as np
import pandas as pd

import matplotlib.pyplot as plt
plt.style.use('fivethirtyeight')


# In[1]:


from sklearn.preprocessing import MinMaxScaler
from keras.models import Sequential
from keras.layers import Dense, LSTM


# In[3]:


pip install --ignore-installed --upgrade tensorflow==2.2.0


# In[27]:


get_ipython().system(' pip install keras')


# In[2]:


from sklearn.preprocessing import MinMaxScaler
from keras.models import Sequential
from keras.layers import Dense, LSTM


# In[ ]:




