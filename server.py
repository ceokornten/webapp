from flask import Flask , render_template
app = Flask(__name__)
px_id = 12345678978
px_track = "PageView"

@app.route('/')
def Home():
   return render_template('index.php')
