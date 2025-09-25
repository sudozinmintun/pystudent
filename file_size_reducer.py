import os
from PIL import Image

# Input and output folders
input_folder = "/home/"
output_folder = "/home/"

# Create output folder if not exists
os.makedirs(output_folder, exist_ok=True)

# JPEG compression quality (adjust: 40–60 = smaller size, lower quality)
JPEG_QUALITY = 60  

for filename in os.listdir(input_folder):
    if filename.lower().endswith((".jpg", ".jpeg", ".png")):
        file_path = os.path.join(input_folder, filename)
        img = Image.open(file_path)

        # Default output path keeps the same extension
        output_path = os.path.join(output_folder, filename)

        if filename.lower().endswith((".jpg", ".jpeg", ".png")):
            # Compress JPEG
            img.save(output_path, "JPEG", optimize=True, quality=JPEG_QUALITY)
        
        elif filename.lower().endswith(".png"):
            # Compress PNG (optimize only, keep alpha channel)
            img.save(output_path, "PNG", optimize=True)

        # Print before and after size
        before_size = os.path.getsize(file_path) / 1024  # KB
        after_size = os.path.getsize(output_path) / 1024  # KB
        print(f"{filename}: {before_size:.1f} KB -> {after_size:.1f} KB")
