xml_string = """<message>
        <body>
            Something
            <p>
                XML Validation Example
            </p>
        </body>
    </message>
"""
stack = []
valid = True
lines = xml_string.splitlines()
for line in lines:
    line = line.strip()
    line_length = len(line)
    if line.startswith("</"):
        tag = line[2 : line_length - 1]
        top_of_stack = stack.pop()
        print("end tag", tag)
        if top_of_stack != tag:
            valid = False
            break

    elif line.startswith("<"):
        tag = line[1 : line_length - 1]
        stack.append(tag)
        print("start tag", tag)
    else:
        print("Nomal text", line)


if valid == False:
    print("Invalid XML")
elif len(stack) != 0:
    print("Invalid XML")
else:
    print("Valid XML")