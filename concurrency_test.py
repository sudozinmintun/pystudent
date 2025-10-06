import asyncio
import time

async def greet(name, delay):
    print(f"{name}: Starting greeting...")

    await asyncio.sleep(delay)

    print(f"{name}: Greeting complete after {delay} seconds.")

    return f"Hello, {name}"

async def main():
    start_time = time.time()
    
    tasks = [
        greet("Alice", 3),
        greet("Bob", 1),
        greet("Charlie", 2)
    ]

    results = await asyncio.gather(*tasks)

    end_time = time.time()

    print(f"\nAll tasks finished. Results: {results}")
    print(f"Total time taken: {end_time - start_time:.4f} seconds (not 3+1+2=6s)")

if __name__ == '__main__':
   asyncio.run(main())