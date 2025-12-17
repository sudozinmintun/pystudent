import subprocess

input_file = "Den.Of.Thieves.2.Pantera.2025.1080p.WEBRip.HEVC (CM).mkv"
output_file = "Den.Of.Thieves.2.Pantera.2025.1080p.WEBRip.HEVC (CM).mkv.mp4"

cmd = [
    "ffmpeg",
    "-i", input_file,
    "-codec", "copy",   # no re-encode → fast conversion
    output_file
]

subprocess.run(cmd)
print("Done!")
