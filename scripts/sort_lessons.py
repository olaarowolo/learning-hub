import json

# Load the JSON data
with open('data/lessons.json', 'r') as f:
    data = json.load(f)

# Define year to KS mapping
year_to_ks = {
    'Reception': 'EYFS',
    'Year 1': 'KS1',
    'Year 2': 'KS1',
    'Year 3': 'KS2',
    'Year 4': 'KS2',
    'Year 5': 'KS2',
    'Year 6': 'KS2',
    'Year 7': 'KS3',
    'Year 8': 'KS3',
    'Year 9': 'KS3',
    'Year 10': 'KS4',
    'Year 11': 'KS4',
    'Year 12': 'KS5',
    'Year 13': 'KS5'
}

# Define year order
year_order = {
    'Reception': 0,
    'Year 1': 1,
    'Year 2': 2,
    'Year 3': 3,
    'Year 4': 4,
    'Year 5': 5,
    'Year 6': 6,
    'Year 7': 7,
    'Year 8': 8,
    'Year 9': 9,
    'Year 10': 10,
    'Year 11': 11,
    'Year 12': 12,
    'Year 13': 13
}

# Define subject order
subject_order = {
    'Maths': 0,
    'English': 1
}

# Add comment to each lesson
for lesson in data:
    ks = year_to_ks[lesson['year']]
    comment = f"{ks} {lesson['year']} {lesson['subject']}"
    lesson['comment'] = comment

# Sort the data
data.sort(key=lambda x: (year_order[x['year']], subject_order[x['subject']], x['term'], x['title']))

# Write back to the file
with open('data/lessons.json', 'w') as f:
    json.dump(data, f, indent=2)
