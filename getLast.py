logfile = "coffee_log.txt"

import sys
import numpy as np
import datetime

user = sys.argv[1]

data = np.genfromtxt(logfile, dtype=None)[:-1] # Indexing removes dtype info

# Get datetime string only for given user
data = [data[1] for data in data if data[0] == user]

last_drink = data[-1]
last_drink = datetime.datetime.fromtimestamp(last_drink)

# Set output
output = str(last_drink)

today = datetime.datetime.now()

if last_drink.date() == today.date():
	diff = today - last_drink 
	output = str(diff) + "ago - " + output
print(output)
