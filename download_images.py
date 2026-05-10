import os
import urllib.request
import time

base = r"c:\Users\Ahad\Desktop\P\mamun vai personal\softnsolution\softnsolution\public\images"

dirs = [
    os.path.join(base, "hero"),
    os.path.join(base, "services"),
    os.path.join(base, "portfolio"),
    os.path.join(base, "blog"),
    os.path.join(base, "about"),
    os.path.join(base, "team"),
    os.path.join(base, "icons"),
]
for d in dirs:
    os.makedirs(d, exist_ok=True)

headers = {"User-Agent": "Mozilla/5.0"}

def download(url, path):
    try:
        req = urllib.request.Request(url, headers=headers)
        with urllib.request.urlopen(req, timeout=30) as r:
            with open(path, "wb") as f:
                f.write(r.read())
        print(f"OK: {os.path.basename(path)}")
    except Exception as e:
        print(f"FAIL: {os.path.basename(path)} - {e}")
    time.sleep(0.5)

images = [
    # Hero
    ("https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=900&q=80", os.path.join(base,"hero","hero-main.jpg")),
    # Services
    ("https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=600&q=80", os.path.join(base,"services","web-design.jpg")),
    ("https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=600&q=80", os.path.join(base,"services","web-dev.jpg")),
    ("https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?w=600&q=80", os.path.join(base,"services","seo.jpg")),
    ("https://images.unsplash.com/photo-1611926653458-09294b3142bf?w=600&q=80", os.path.join(base,"services","digital-marketing.jpg")),
    ("https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&q=80", os.path.join(base,"services","software.jpg")),
    ("https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80", os.path.join(base,"services","app-dev.jpg")),
    ("https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&q=80", os.path.join(base,"services","ecommerce.jpg")),
    ("https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80", os.path.join(base,"services","maintenance.jpg")),
    # Portfolio
    ("https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=700&q=80", os.path.join(base,"portfolio","p1.jpg")),
    ("https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=700&q=80", os.path.join(base,"portfolio","p2.jpg")),
    ("https://images.unsplash.com/photo-1509062522246-3755977927d7?w=700&q=80", os.path.join(base,"portfolio","p3.jpg")),
    ("https://images.unsplash.com/photo-1565299507177-b0ac66763828?w=700&q=80", os.path.join(base,"portfolio","p4.jpg")),
    ("https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=700&q=80", os.path.join(base,"portfolio","p5.jpg")),
    ("https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=700&q=80", os.path.join(base,"portfolio","p6.jpg")),
    # Blog
    ("https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=700&q=80", os.path.join(base,"blog","blog1.jpg")),
    ("https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?w=700&q=80", os.path.join(base,"blog","blog2.jpg")),
    ("https://images.unsplash.com/photo-1611926653458-09294b3142bf?w=700&q=80", os.path.join(base,"blog","blog3.jpg")),
    ("https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=700&q=80", os.path.join(base,"blog","blog4.jpg")),
    ("https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=700&q=80", os.path.join(base,"blog","blog5.jpg")),
    ("https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=700&q=80", os.path.join(base,"blog","blog6.jpg")),
    # About
    ("https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80", os.path.join(base,"about","team.jpg")),
    # Team
    ("https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&q=80", os.path.join(base,"team","ceo.jpg")),
    ("https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&q=80", os.path.join(base,"team","dev.jpg")),
    ("https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80", os.path.join(base,"team","designer.jpg")),
    ("https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80", os.path.join(base,"team","marketing.jpg")),
]

for url, path in images:
    download(url, path)

print("Done!")
