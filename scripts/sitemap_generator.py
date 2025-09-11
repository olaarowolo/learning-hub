import json

# Load the lessons data, ignoring // comments
with open('lessons.json', 'r') as f:
    content = f.read()

# Remove lines starting with //
lines = content.split('\n')
clean_lines = [line for line in lines if not line.strip().startswith('//')]
clean_content = '\n'.join(clean_lines)

data = json.loads(clean_content)

base_url = 'https://learn.oatutors.co.uk'

# Collect unique URLs
urls = set()
for lesson in data:
    urls.add(lesson['url'])

# Generate sitemap.xml
with open('sitemap.xml', 'w') as f:
    f.write('<?xml version="1.0" encoding="UTF-8"?>\n')
    f.write('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n')
    for url in sorted(urls):
        f.write('  <url>\n')
        f.write(f'    <loc>{base_url}{url}</loc>\n')
        f.write('  </url>\n')
    f.write('</urlset>\n')
