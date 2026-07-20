import re

def remove_progress_bars():
    file_path = 'c:/laragon/www/portfolio/index.html'
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Regex to remove percentage spans: <span class="font-code text-neon-blue fw-bold small">95%</span>
    content = re.sub(r'\s*<span class="font-code text-neon-blue fw-bold small">\d+%</span>', '', content)

    # Regex to remove the entire progress div block
    # We will match <div class="progress"...> up to its closing </div>
    # Using a non-greedy match to find the closing div of the progress bar wrapper
    progress_regex = r'\s*<div class="progress" style="height: 8px[^>]*>\s*<div class="progress-bar[^>]*></div>\s*</div>'
    
    content = re.sub(progress_regex, '', content)

    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(content)

    print("Progress bars and percentages removed.")

if __name__ == '__main__':
    remove_progress_bars()
