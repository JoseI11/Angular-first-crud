# 🏎️ Angular + Laravel - Gestor de Pilotos F1 2026

Un **CRUD profesional y moderno** para gestionar pilotos de Fórmula 1, desarrollado con Angular y Laravel. Proyecto ideal para demostrar experiencia en full-stack development con tecnologías modernas.

## 📋 Descripción

Esta aplicación permite crear, leer, actualizar y eliminar pilotos de F1 2026. Incluye:
- ✅ **Filtrado en tiempo real** por nombre, equipo y nacionalidad
- ✅ **Validaciones robustas** en frontend y backend
- ✅ **Diseño responsivo y moderno** con UI/UX mejorada
- ✅ **Colores auténticos de equipos F1** con efecto hover
- ✅ **Paginación y estadísticas** de pilotos
- ✅ **Soft Deletes** - eliminación lógica en la base de datos

## 📸 Capturas de la Aplicación

### Pantalla Principal - Lista de Pilotos
![Pantalla Principal](frontend/public/Captura%20de%20pantalla%202026-02-20%20221841.png)

### Filtrado en Tiempo Real
![Filtrado](frontend/public/Captura%20de%20pantalla%202026-02-20%20221923.png)

### Formulario de Edición/Creación
![Formulario](frontend/public/Captura%20de%20pantalla%202026-02-20%20221935.png)

---

## 🛠️ Stack Tecnológico

### **Frontend**
- **Angular 19** (Standalone Components)
- **Reactive Forms** con validación
- **RxJS** para manejo de eventos y operadores
- **TypeScript** para tipado estricto
- **CSS3** con Grid/Flexbox
- **HttpClient** para comunicación HTTP

### **Backend**
- **Laravel 11** (Framework PHP)
- **PostgreSQL** como base de datos
- **Eloquent ORM** para manejo de datos
- **Seeding** con datos de F1 2026
- **Soft Deletes** para eliminación lógica
- **CORS** habilitado para Angular

---

## 🚀 Inicio Rápido

### Requisitos Previos
- PHP 8.2+
- Node.js 18+ y npm/yarn
- PostgreSQL 13+
- Composer
- Angular CLI (`npm install -g @angular/cli`)

### Instalación del Backend

```bash
cd backend

# Instalar dependencias
composer install
npm install

# Configurar entorno
cp .env.example .env

# Configurar la base de datos en .env:
# DB_CONNECTION=pgsql
# DB_HOST=127.0.0.1
# DB_PORT=5432
# DB_DATABASE=angular_crud
# DB_USERNAME=postgres
# DB_PASSWORD=tu_password

# Generar key y realizar migraciones
php artisan key:generate
php artisan migrate --seed

# Iniciar servidor Laravel (puerto 8000)
php artisan serve --port=8000
```

### Instalación del Frontend

```bash
cd frontend

# Instalar dependencias
npm install

# Iniciar servidor Angular (puerto 4200)
ng serve
```

**Acceso a la aplicación:** http://localhost:4200

---

## 📦 Estructura del Proyecto

```
Angular-first-crud/
├── backend/                    # API Laravel
│   ├── app/
│   │   ├── Http/Controllers/   # PilotController
│   │   ├── Models/             # Pilot.php (con SoftDeletes)
│   │   └── Providers/
│   ├── database/
│   │   ├── migrations/         # Tablas (pilots, users, etc)
│   │   └── seeders/            # PilotSeeder con 20 pilotos F1
│   ├── routes/
│   │   └── api.php             # Rutas API REST
│   └── .env.example
│
└── frontend/                   # App Angular
    ├── src/app/
    │   ├── drivers/
    │   │   ├── drivers-list/       # Tabla con filtros
    │   │   ├── drivers-form/       # Formulario mejorado
    │   │   ├── drivers-detail/     # Modal de edición
    │   │   └── drivers.service.ts  # Lógica de negocio
    │   ├── drivers-filters/        # Componente de filtros
    │   ├── services/               # Servicios compartidos
    │   └── styles.css              # Estilos globales
    ├── public/                     # Capturas de pantalla
    └── package.json
```

---

## ✨ Características Principales

### 1. **Filtrado en Tiempo Real**
- Búsqueda por nombre de piloto (con debounce optimizado)
- Filtro por equipo (10 equipos F1 2026)
- Filtro por nacionalidad
- Filtrado local en arrays para máximo rendimiento
- Indicador visual de pilotos encontrados

### 2. **Validaciones Robustas**
- **Frontend**: Validators de Angular (required, minLength, min/max)
- **Backend**: Validación en Laravel con mensajes de error
- Campos requeridos marcados con asterisco `*`
- Mensajes de error específicos para cada campo
- Estado visual del formulario (error/success)

### 3. **Interfaz Moderna**
- Colores auténticos de equipos F1 (Ferrari rojo, Mercedes cyan, etc)
- Badges para estadísticas (Poles en amarillo, Wins en verde)
- Hover effects y transiciones suaves
- Diseño responsive (mobil, tablet, desktop)
- Header dark con tipografía moderna

### 4. **Gestión de Pilotos**
- ✅ Crear nuevo piloto
- ✅ Editar piloto existente
- ✅ Ver detalles del piloto
- ✅ Eliminar piloto (Soft Delete)
- ✅ Cargar datos de F1 2026 automáticamente

### 5. **Base de Datos**
- Tabla `pilots` con 20 pilotos reales F1 2026
- Soft Deletes implemented (`deleted_at` column)
- Timestamps automaticos (created_at, updated_at)
- Índices en campos de búsqueda

---

## 🔗 API REST - Endpoints

| Método | Endpoint | Descripción |
|--------|----------|-------------|
| `GET` | `/api/pilots` | Obtener todos los pilotos (con filtros opcionales) |
| `GET` | `/api/pilots/{id}` | Obtener piloto por ID |
| `POST` | `/api/pilots` | Crear nuevo piloto |
| `PUT` | `/api/pilots/{id}` | Actualizar piloto |
| `DELETE` | `/api/pilots/{id}` | Eliminar piloto (Soft Delete) |

### Parámetros de Filtro (GET /api/pilots)
```
?search=max          # Busca por nombre
?team=Ferrari        # Filtra por equipo
?nationality=Dutch   # Filtra por nacionalidad
```

---

## 📊 Datos de Ejemplo

20 pilotos de F1 2026 cargados automáticamente con el seeder:

| Puesto | Piloto | Equipo | País | Auto | Poles | Wins |
|--------|--------|--------|------|------|-------|------|
| 1 | Max Verstappen | Red Bull Racing | 🇳🇱 | 1 | 41 | 63 |
| 2 | Lewis Hamilton | Ferrari | 🇬🇧 | 44 | 136 | 103 |
| 3 | Charles Leclerc | Ferrari | 🇲🇨 | 16 | 5 | 5 |
| 4 | Lando Norris | McLaren | 🇬🇧 | 4 | 3 | 3 |
| ... | ... | ... | ... | ... | ... | ... |

---

## 🎓 Cómo Esta Aplicación Demuestra Experiencia

### **Angular Knowledge**
- Standalone Components (arquitectura moderna)
- Reactive Forms con validacion personalizada
- RxJS operators (debounceTime, distinctUntilChanged, tap, catchError)
- Communication entre componentes (@Input, @Output, EventEmitter)
- Services inyectables con HttpClient
- Directivas (*ngIf, *ngFor, [ngClass])

### **Laravel Knowledge**
- Controllers con métodos RESTful
- Models con Eloquent ORM
- Migrations y Seeders
- Query Builder para filtrados
- Validación de requests
- CORS y middleware
- Soft Deletes (Eloquent trait)

### **Database Design**
- Schema con migraciones
- Relationships (aunque simple, demuestra entendimiento)
- Indexing para búsqueda eficiente
- Timestamps automáticos
- Soft deletes para data integrity

### **UI/UX**
- Responsive Design
- Accesibilidad (labels, aria-*)
- Visual feedback (hover, active, loading states)
- Mensajes de error descriptivos
- Colores y espaciado coherente

---

## 🔧 Desarrollo y Testing

### Comandos Útiles - Backend
```bash
# Ejecutar seeders
php artisan db:seed

# Ver rutas registradas
php artisan route:list

# Ejecutar migraciones
php artisan migrate
php artisan migrate:rollback

# Abrir tinker (REPL)
php artisan tinker
```

### Comandos Útiles - Frontend
```bash
# Generar componentes
ng generate component drivers/drivers-form

# Build para producción
ng build --configuration production

# Ejecutar tests
ng test
```

---

## 📝 Notas de Configuración

### CORS - Backend
Asegurate que CORS esté habilitado en `config/cors.php`:
```php
'allowed_origins' => ['http://localhost:4200'],
```

### HttpClient - Frontend
El servicio usa `http://localhost:8000/api/pilots` por defecto. Para cambiar el host:
```typescript
// drivers.service.ts
private apiUrl = 'http://localhost:8000/api/pilots';
```

### Variables de Entorno
- **Backend** (.env): Base de datos, mail, app key
- **Frontend** (environment.ts): API URLs, flags de debug

---

## 🚀 Deployment

### Backend (Laravel)
```bash
# Producción
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

### Frontend (Angular)
```bash
# Build production
ng build --configuration production

# Archivos en: dist/angular-first-crud/
```

---

## 📄 Licencia

MIT License - Libre para usar, modificar y distribuir.

---

## 👨‍💻 Autor

Desarrollado como demostración de experiencia en **Full-Stack Development** con Angular y Laravel.

**Tecnologías demostradas**: Angular 19, Laravel 11, PostgreSQL, RxJS, Reactive Forms, RESTful APIs, UI/UX Design, Responsive Design.

---

## 📞 Soporte

Para preguntas o problemas:
1. Verifica que PostgreSQL esté corriendo
2. Revisa los `.env` en backend y frontend
3. Asegurate de que los puertos 4200 y 8000 estén disponibles
4. Revisa el archivo `backend/.env.example` para configuration correcta
- Si quieres un script de inicialización (setup) o un `Makefile`, dímelo y lo agrego.
