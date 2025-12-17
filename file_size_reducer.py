import os
from PIL import Image

# Input and output folders
input_folder = "/home/zion/Desktop/reho"
output_folder = "/home/zion/Desktop/reho/OutputData"

# Create output folder if not exists
os.makedirs(output_folder, exist_ok=True)

# JPEG compression quality
JPEG_QUALITY = 40  # 35–50 gives smaller but still clean
MAX_WIDTH = 1200   # resize large photos to 1200px wide

for filename in os.listdir(input_folder):
    if filename.lower().endswith((".jpg", ".jpeg", ".png")):
        file_path = os.path.join(input_folder, filename)
        img = Image.open(file_path).convert("RGB")

        # Resize large images
        width, height = img.size
        if width > MAX_WIDTH:
            ratio = MAX_WIDTH / width
            new_size = (MAX_WIDTH, int(height * ratio))
            img = img.resize(new_size, Image.LANCZOS)

        # Save as compressed JPEG (smaller & still good quality)
        output_filename = os.path.splitext(filename)[0] + ".jpg"
        output_path = os.path.join(output_folder, output_filename)

        img.save(output_path, "JPEG", optimize=True, quality=JPEG_QUALITY, progressive=True)

        # Print before and after size
        before_size = os.path.getsize(file_path) / 1024  # KB
        after_size = os.path.getsize(output_path) / 1024  # KB
        print(f"{filename}: {before_size:.1f} KB -> {after_size:.1f} KB")
