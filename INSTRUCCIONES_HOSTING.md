# 🚀 Guía para Subir Los Troncos Resto Bar a Hosting Gratuito

## 📦 Archivos Necesarios

Tu sitio web incluye:
- `index.php` - Página principal
- `css/` - Estilos
- `js/` - JavaScript
- `imagenes/` - Fotos de platos y ambiente
- `documentos/` - PDF de la carta
- `include/` - Header y Footer

## 🌐 OPCIÓN 1: InfinityFree (Recomendado - Soporta PHP)

### ✅ CONFIRMADO: Tu sitio es 100% compatible con InfinityFree Gratuito

**Plan Gratuito incluye:**
- 5 GB espacio (necesitas ~100 MB) ✅
- Bandwidth ilimitado ✅
- PHP con selección de versión ✅
- cPanel ✅
- Dominios ilimitados ✅

### Paso 1: Registrarse
1. Ve a https://www.infinityfree.net
2. Haz clic en "Sign Up Free"
3. Completa el formulario con tu email
4. Verifica tu cuenta por email

### Paso 2: Crear tu sitio
1. En el panel de control, click "Create Account"
2. Elige un subdominio gratuito:
   - `lostroncos.rf.gd`
   - `lostroncos.epizy.com`
   - O usa tu propio dominio si tienes
3. Espera 2-5 minutos mientras se crea tu cuenta

### Paso 3: Subir archivos via FTP

#### Instalar FileZilla:
1. Descarga FileZilla desde: https://filezilla-project.org/download.php?type=client
2. Instala el programa

#### Conectar por FTP:
Desde tu panel de InfinityFree, encontrarás:
- **Host:** ftpupload.net (o el que te indiquen)
- **Usuario:** Tu username (ej: epiz_12345678)
- **Contraseña:** La que configuraste
- **Puerto:** 21

#### Subir archivos:
1. Abre FileZilla
2. Conecta usando los datos FTP
3. En el lado remoto, ve a la carpeta `htdocs/`
4. Arrastra TODOS los archivos de `C:\xampp\htdocs\Los_Troncos\` a `htdocs/`
5. Espera a que termine la subida

### Paso 4: Crear base de datos (si la necesitas en el futuro)
1. En el panel, ve a "MySQL Databases"
2. Crea una base de datos
3. Guarda los datos de conexión

---

## 🌐 OPCIÓN 2: 000webhost (Alternativa)

### Paso 1: Registrarse
1. Ve a https://www.000webhost.com
2. Click "Sign Up Free"
3. Completa el registro

### Paso 2: Crear sitio web
1. Click "Build Website"
2. Elige "Upload Your Site"
3. Elige un subdominio (ej: `lostroncos.000webhostapp.com`)

### Paso 3: Subir archivos
1. Ve a "File Manager"
2. Ve a la carpeta `public_html/`
3. Sube todos tus archivos allí
4. O usa FTP como en InfinityFree

---

## 🌐 OPCIÓN 3: GitHub Pages + Conversión a HTML

Si quieres usar GitHub Pages (más confiable pero requiere conversión):

### Paso 1: Convertir PHP a HTML
El sitio usa PHP solo para includes. Puedo ayudarte a convertirlo.

### Paso 2: Subir a GitHub
```bash
cd C:\xampp\htdocs\Los_Troncos
git add .
git commit -m "Preparado para hosting"
git push origin main
```

### Paso 3: Activar GitHub Pages
1. Ve a tu repositorio en GitHub
2. Settings > Pages
3. Selecciona "main" branch
4. Save

---

## ✅ Checklist Pre-Subida

- [ ] Verifica que todas las imágenes estén en la carpeta `imagenes/`
- [ ] Verifica que el PDF esté en `documentos/carta.pdf`
- [ ] Verifica que los archivos CSS y JS estén en sus carpetas
- [ ] Prueba el sitio localmente en XAMPP antes de subir
- [ ] Asegúrate de que no haya errores en el navegador (F12)

## 🔧 Configuración Post-Subida

### 1. Verifica las rutas
Si algo no funciona, revisa que las rutas sean relativas:
- ✅ `imagenes/foto.jpg` (correcto)
- ❌ `C:/xampp/htdocs/Los_Troncos/imagenes/foto.jpg` (incorrecto)

### 2. Verifica permisos
En algunos hostings, necesitas dar permisos de lectura (755) a las carpetas.

### 3. Configura SSL (Certificado HTTPS)
La mayoría de hostings gratuitos ofrecen SSL gratis. Actívalo desde el panel.

---

## 📱 Después de Subir

### URLs que tendrás:
- **InfinityFree:** `http://lostroncos.rf.gd` o `http://lostroncos.epizy.com`
- **000webhost:** `http://lostroncos.000webhostapp.com`
- **GitHub Pages:** `https://stefanoreichert.github.io/LosTroncosRestoBar/`

### Comparte tu sitio:
- Facebook
- Instagram
- Google My Business
- WhatsApp Business

---

## 🆘 Problemas Comunes

### Problema: Las imágenes no se ven
**Solución:** Verifica que la carpeta `imagenes/` esté en el servidor y las rutas sean correctas (minúsculas).

### Problema: El PDF no se abre
**Solución:** Verifica que `documentos/carta.pdf` exista y tenga permisos de lectura.

### Problema: Errores PHP
**Solución:** Verifica la versión de PHP en el hosting (debe ser 7.4+).

### Problema: Sitio lento
**Solución:** 
- Optimiza imágenes (usa TinyPNG.com)
- Activa caché en el hosting

---

## 💡 Consejos Pro

1. **Optimiza imágenes:** Comprime las fotos antes de subir (usa TinyPNG.com)
2. **Backup regular:** Descarga una copia de tu sitio cada semana
3. **Monitorea:** Usa Google Analytics para ver visitantes
4. **SEO:** Registra tu sitio en Google Search Console
5. **Dominio propio:** Cuando puedas, compra un dominio (.com.ar) por ~$500/año

---

## 🎯 Siguiente Paso Recomendado

**Te recomiendo InfinityFree porque:**
- ✅ Soporta PHP (tu sitio lo necesita)
- ✅ Sin anuncios molestos
- ✅ Buen rendimiento
- ✅ Fácil de usar
- ✅ Puedes agregar tu dominio propio después

**¿Necesitas ayuda específica con algún paso?** ¡Avísame!
