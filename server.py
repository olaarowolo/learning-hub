import http.server
import socketserver
import os
from urllib.parse import unquote

PORT = 8000
DIRECTORY = os.getcwd()

class CustomHandler(http.server.SimpleHTTPRequestHandler):
    def do_GET(self):
        # Decode the path
        path = unquote(self.path)
        # Remove leading slash
        if path.startswith('/'):
            path = path[1:]
        # If path is empty, serve index.html
        if not path:
            path = 'index.html'
        # Check if file exists
        full_path = os.path.join(DIRECTORY, path)
        if os.path.exists(full_path) and os.path.isfile(full_path):
            # Serve the file
            return super().do_GET()
        else:
            # Serve 404.html
            self.path = '/yeargroups/404.html'
            return super().do_GET()

    def translate_path(self, path):
        # Override to handle our custom logic
        return super().translate_path(path)

with socketserver.TCPServer(("", PORT), CustomHandler) as httpd:
    print(f"Serving at port {PORT}")
    print(f"Broken links will be redirected to yeargroups/404.html")
    httpd.serve_forever()
