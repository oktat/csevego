# Sebezhetőség vizsgálathoz

XSS vizsgálat

## Lehetséges bemenő adatok

Csevegő sebezhetőség vizsgálathoz.

```html
<style> body { color: navy} </style>
```

```html
<script> print() </script>
```

## Indítás

```cmd
php -S localhost:4500 -t .
```
