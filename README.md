# ✦ Nexora — لندینگ‌پیج چندصفحه‌ای با PHP

<div align="center">

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Status](https://img.shields.io/badge/Status-Active-8b5cf6?style=for-the-badge)
![License](https://img.shields.io/badge/License-MIT-3b82f6?style=for-the-badge)
![GitHub Pages](https://img.shields.io/badge/Deployed%20on-GitHub%20Pages-24292e?style=for-the-badge&logo=github)

**یک لندینگ‌پیج SaaS با طراحی تیره و گرادیان بنفش/آبی، ساخته‌شده با PHP خالص (بدون فریم‌ورک)**

[🔗 مشاهده دمو](#-دمو-زنده) · [🚀 اجرا](#-اجرا-روی-سیستم-خودتان) · [🧱 ساختار پروژه](#-ساختار-پروژه) · [🎨 شخصی‌سازی](#-شخصی‌سازی-رنگ‌ها)

</div>

---

## 📌 درباره پروژه

**Nexora** یک لندینگ‌پیج کامل و چندصفحه‌ای برای یک محصول/پلتفرم SaaS فرضی است. تمام محتوای صفحات (فیچرها، پلن‌های قیمتی، نظرات مشتری‌ها، پست‌های بلاگ، تیم و ...) از طریق **آرایه‌های PHP** مدیریت می‌شود؛ یعنی برای اضافه یا ویرایش هر بخش، کافی‌ست فقط یک آرایه را در `includes/data.php` تغییر دهید — بدون دست‌زدن به HTML.

پروژه با روش **Server-Side Include** نوشته شده (هدر/فوتر مشترک، دیتای مشترک) و در نهایت برای هاست‌های استاتیک مثل GitHub Pages، به HTML خالص build می‌شود.

## 🔗 دمو زنده

> آدرس سایت پس از فعال‌سازی GitHub Pages در این بخش قرار می‌گیرد:
>
> **https://mr-hosein.github.io/Nexora_project/**

## ✨ امکانات

| بخش | توضیح |
|---|---|
| 🏠 صفحه اصلی | هرو با انیمیشن مکعب SVG، نوار اعتماد برندها، پیش‌نمایش فیچرها و آمار |
| 🧩 صفحه فیچرها | گرید کامل امکانات محصول |
| 🏢 صفحه راه‌حل‌ها | راه‌حل‌های اختصاصی بر اساس صنعت (فروشگاه، SaaS، فین‌تک، سلامت، ...) |
| 💳 صفحه قیمت‌گذاری | ۳ پلن + تاگل ماهانه/سالانه (محاسبه خودکار ۲۰٪ تخفیف) + آکاردئون FAQ |
| 📰 صفحه منابع/بلاگ | فهرست مقالات با فیلتر دسته‌بندی (بدون رفرش صفحه) |
| 🧑‍🤝‍🧑 صفحه درباره ما | ارزش‌های تیم + کارت اعضا |
| ✉️ صفحه تماس | فرم تماس با اعتبارسنجی سمت کلاینت |
| 📝 صفحه ثبت‌نام | فرم Get Started متصل به پلن‌های قیمتی |
| 🌗 حالت روشن/تاریک | سوییچ کامل تم با یک کلیک (بدون رفرش) |
| 📱 ریسپانسیو کامل | تجربه یکسان در موبایل، تبلت و دسکتاپ |

## 🧱 ساختار پروژه

```
nexora/
├── index.php               # صفحه اصلی
├── features.php             # همه‌ی امکانات
├── solutions.php             # راه‌حل‌ها بر اساس صنعت
├── pricing.php                 # قیمت‌گذاری + FAQ
├── resources.php                # بلاگ با فیلتر دسته‌بندی
├── company.php                     # درباره ما + تیم
├── contact.php                       # فرم تماس
├── signup.php                          # فرم ثبت‌نام
│
├── includes/
│   ├── data.php              # 🧠 تمام محتوای سایت (آرایه‌های PHP) + آیکون‌های SVG
│   ├── header.php           # نویگیشن مشترک همه صفحات
│   └── footer.php             # فوتر + جاوااسکریپت مشترک (تاگل تم، منو موبایل، FAQ، فیلتر بلاگ)
│
├── assets/
│   └── style.css                # تمام استایل سایت (توکن‌های رنگی با CSS Variables)
│
└── docs/                      # ⚙️ خروجی build شده (HTML خالص) — همینجا روی GitHub Pages سرو می‌شود
    ├── index.html
    ├── features.html
    ├── ...
    └── assets/style.css
```

> 💡 پوشه‌ی `docs/` هرگز مستقیم ویرایش نمی‌شود — همیشه از روی فایل‌های `.php` بازتولید می‌شود (بخش «Build» را ببینید).

## 🚀 اجرا روی سیستم خودتان

### پیش‌نیاز
- PHP نسخه ۸ یا بالاتر ([دانلود](https://www.php.net/downloads))

### اجرای لوکال
```bash
git clone https://github.com/Mr-Hosein/Nexora_project.git
cd Nexora_project
php -S 0.0.0.0:8000
```
سپس مرورگر را باز کنید: `http://localhost:8000`

> در **GitHub Codespaces** هم دقیقاً همین دستور کار می‌کند؛ فقط از پنل **Ports** پورت ۸۰۰۰ را forward کنید.

## 🏗 ساخت نسخه استاتیک (Build)

از آنجا که GitHub Pages فقط فایل استاتیک سرو می‌کند، هر بار که محتوای PHP را تغییر دادید باید دوباره build بگیرید:

```bash
mkdir -p docs
for f in index features solutions pricing resources company contact signup; do
  php ${f}.php > docs/${f}.html
done
cp -r assets docs/assets

# تبدیل لینک‌های داخلی از .php به .html
cd docs && sed -i 's/\.php"/\.html"/g' *.html && cd ..
```

سپس:
```bash
git add docs
git commit -m "Rebuild static site"
git push
```

## ⚙️ تنظیم GitHub Pages (فقط یک‌بار)

1. **Settings → Pages**
2. Source: `Deploy from a branch`
3. Branch: `main` — پوشه: **`/docs`**
4. **Save**

## 🎨 شخصی‌سازی رنگ‌ها

تمام رنگ‌های سایت از طریق CSS Variables در ابتدای `assets/style.css` کنترل می‌شود:

```css
:root{
  --purple:#8b5cf6;
  --blue:#3b82f6;
  --grad: linear-gradient(135deg,#7c3aed 0%,#3b82f6 100%);
  --bg:#07070d;
  --panel:#12121e;
}
```

برای تغییر پالت رنگی، کافی‌ست همین چند مقدار را ویرایش کنید — همه‌ی صفحات به‌صورت خودکار به‌روزرسانی می‌شوند. تنظیمات حالت روشن هم در انتهای همین فایل، زیر بخش `LIGHT MODE` قرار دارد.

## ✏️ ویرایش محتوا

برای تغییر متن‌ها، افزودن پلن قیمتی، پست بلاگ، عضو تیم و... فقط کافی‌ست آرایه‌های مربوطه را در `includes/data.php` ویرایش کنید. برای مثال، افزودن یک فیچر جدید:

```php
$features[] = [
    'icon' => 'bolt',
    'title' => 'عنوان فیچر جدید',
    'desc'  => 'توضیح کوتاه فیچر',
];
```

هیچ نیازی به تغییر HTML نیست — رندر به‌صورت خودکار انجام می‌شود.

## 🗺 نقشه راه (پیشنهادی)

- [ ] اتصال فرم تماس/ثبت‌نام به یک بک‌اند واقعی (ایمیل یا دیتابیس)
- [ ] افزودن صفحه‌ی Blog تکی برای هر پست
- [ ] چندزبانه‌سازی (فارسی/انگلیسی)
- [ ] افزودن تست‌های خودکار برای build

## 📄 لایسنس

این پروژه تحت لایسنس **MIT** منتشر شده است — استفاده، تغییر و توزیع آزاد است.

---

<div align="center">

ساخته‌شده با 💜 و PHP — توسط [Mr-Hosein](https://github.com/Mr-Hosein)

</div>
