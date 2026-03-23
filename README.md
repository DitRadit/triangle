# 📘 README – Triangle Classification (triangle.php & triangle2.php)

## 🧾 Deskripsi Umum

Proyek ini terdiri dari dua file PHP:

- `triangle.php`
- `triangle2.php`

Keduanya digunakan untuk menentukan jenis segitiga berdasarkan input yang diberikan, tetapi menggunakan pendekatan yang berbeda:

- `triangle.php` → berdasarkan **sisi dan sudut**
- `triangle2.php` → berdasarkan **validasi sisi + teorema matematika**

---

# 📂 1. triangle.php

## 📥 Input

Program menerima **6 input dari user (melalui STDIN)**:

1. 3 angka pertama → panjang sisi segitiga (`a, b, c`)
2. 3 angka berikutnya → besar sudut segitiga (`a1, b1, c1`)

### Contoh Input:

```
3
3
3
60
60
60
```

---

## 📤 Output

Program akan menghasilkan **2 output**:

1. Jenis segitiga berdasarkan sisi
2. Jenis segitiga berdasarkan sudut

### Contoh Output:

```
Segitiga Sama Sisi

Segitiga Lancip
```

---

## 🧠 Penjelasan Logika

### 🔹 1. Klasifikasi Berdasarkan Sisi

```php
if ($a == $b && $b == $c)
```

- Semua sisi sama → **Segitiga Sama Sisi**

```php
else if ($a == $b || $a == $c || $b == $c)
```

- Dua sisi sama → **Segitiga Sama Kaki**

```php
else
```

- Semua sisi berbeda → **Segitiga Sembarang**

---

### 🔹 2. Klasifikasi Berdasarkan Sudut

```php
if ($a1 + $b1 + $c1 != 180)
```

- Jumlah sudut tidak 180° → dianggap **Segitiga Sembarang (tidak valid secara sudut)**

```php
else if (ada sudut == 90)
```

- → **Segitiga Siku-Siku**

```php
else if (ada sudut > 90)
```

- → **Segitiga Tumpul**

```php
else
```

- Semua sudut < 90 → **Segitiga Lancip**

---

# 📂 2. triangle2.php

## 📥 Input

Program menerima **3 input (panjang sisi segitiga)**:

```
a
b
c
```

### Contoh Input:

```
3
4
5
```

---

## 📤 Output

Program menghasilkan satu jenis segitiga:

```
Right Triangle
```

---

## 🧠 Penjelasan Logika

### 🔹 1. Konversi ke Float

```php
$a = floatval($a);
```

- Mengubah input menjadi angka desimal untuk perhitungan matematis

---

### 🔹 2. Validasi Nilai Sisi

```php
if ($a <= 0 || $b <= 0 || $c <= 0)
```

- Jika ada sisi ≤ 0 → **Bukan Segitiga**

---

### 🔹 3. Aturan Segitiga

```php
$max = max($a, $b, $c);
```

- Ambil sisi terbesar

```php
if ($max >= $sum)
```

- Jika sisi terbesar ≥ jumlah dua sisi lain → **Bukan Segitiga**

---

### 🔹 4. Klasifikasi Segitiga

#### ✅ Equilateral Triangle

```php
$a == $b && $b == $c
```

- Semua sisi sama

---

#### ✅ Isosceles Triangle

```php
$a == $b || $a == $c || $b == $c
```

- Dua sisi sama

---

#### ✅ Right Triangle (Teorema Pythagoras)

```php
a² + b² = c²
```

- Salah satu kombinasi memenuhi → **Segitiga Siku-Siku**

---

#### ✅ Free Triangle

```php
else
```

- Semua sisi berbeda dan bukan siku-siku → **Segitiga Sembarang**

---
