# Binar Purwaka - GitHub Pages Portfolio

Website portfolio modern dengan tema dark/light mode dan desain responsif untuk GitHub Pages.

## Fitur

- ✨ **Modern Design** - UI/UX yang modern dan menarik
- 🌓 **Dark/Light Theme** - Toggle tema gelap dan terang
- 📱 **Responsive Design** - Optimal di semua perangkat
- 🎨 **Smooth Animations** - Animasi halus dan interaktif
- ⚡ **Fast Loading** - Optimized untuk performa cepat
- ♿ **Accessible** - Mengikuti best practices aksesibilitas

## Struktur File

```
.
├── index.html      # Halaman utama
├── styles.css      # Styling dengan tema dark/light
├── script.js       # JavaScript untuk interaktivitas
└── README.md       # Dokumentasi
```

## Cara Deploy ke GitHub Pages

1. **Buat repository baru** di GitHub dengan nama `binarpurwaka.github.io`

2. **Clone repository** ke komputer Anda:
   ```bash
   git clone https://github.com/binarpurwaka/binarpurwaka.github.io.git
   cd binarpurwaka.github.io
   ```

3. **Copy semua file** dari folder ini ke repository:
   - `index.html`
   - `styles.css`
   - `script.js`

4. **Commit dan push** ke GitHub:
   ```bash
   git add .
   git commit -m "Initial commit: Add portfolio website"
   git push origin main
   ```

5. **Aktifkan GitHub Pages**:
   - Buka Settings di repository GitHub Anda
   - Scroll ke bagian "Pages"
   - Pilih branch `main` sebagai source
   - Klik Save

6. **Tunggu beberapa menit** dan website akan tersedia di:
   `https://binarpurwaka.github.io`

## Kustomisasi

### Mengubah Informasi Pribadi

Edit file `index.html` dan ubah:
- Nama dan deskripsi di section hero
- Informasi about
- Skills dan tools
- Projects
- Contact information

### Mengubah Warna Tema

Edit file `styles.css` dan ubah variabel CSS di `:root` dan `[data-theme="dark"]`:
- `--accent-primary`: Warna utama
- `--accent-secondary`: Warna sekunder
- `--bg-primary`: Background utama
- `--text-primary`: Warna teks utama

### Menambahkan Project

Tambahkan card project baru di section `#projects`:
```html
<div class="project-card">
    <div class="project-header">
        <h3>Nama Project</h3>
        <span class="project-badge">Technology</span>
    </div>
    <p class="project-description">Deskripsi project</p>
    <div class="project-footer">
        <a href="link-github" target="_blank" class="project-link">
            View on GitHub →
        </a>
    </div>
</div>
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## License

Free to use for personal and commercial projects.

---

**Dibuat dengan ❤️ untuk Binar Purwaka**

