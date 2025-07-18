# Problemas Encontrados en Modelos y Migraciones

## Problemas Principales Identificados

### 1. Sintaxis Incorrecta en Migraciones

**Problema**: Blueprint está generando sintaxis incorrecta en las migraciones.

**Ejemplos incorrectos**:

```php
// INCORRECTO
$table->string('nombre', unique);
$table->string('descripcion', nullable);
$table->boolean('activo', default(true));
$table->enum('tipo_contrato', ["Indefinido","Determinado","Por"]);
```

**Sintaxis correcta**:

```php
// CORRECTO
$table->string('nombre')->unique();
$table->string('descripcion')->nullable();
$table->boolean('activo')->default(true);
$table->enum('tipo_contrato', ["Indefinido","Determinado","Por_Proyecto"]);
```

### 2. Campos Incorrectos en Fillable

**Problema**: Los modelos incluyen campos incorrectos en el array `$fillable`.

**Ejemplos incorrectos**:

```php
protected $fillable = [
    'nombre',
    'descripcion',
    'belongsTo', // ❌ INCORRECTO
    'hasOne',    // ❌ INCORRECTO
];
```

**Solución**: Remover `'belongsTo'` y `'hasOne'` del array `$fillable`.

### 3. Relaciones Mal Generadas

**Problema**: Las relaciones están usando `Foreign::class` en lugar de los modelos correctos.

**Ejemplo incorrecto**:

```php
public function aprobador(): BelongsTo
{
    return $this->belongsTo(Foreign::class); // ❌ INCORRECTO
}
```

**Solución correcta**:

```php
public function aprobador(): BelongsTo
{
    return $this->belongsTo(User::class); // ✅ CORRECTO
}
```

### 4. Enums Truncados

**Problema**: Los enums están siendo truncados en las migraciones.

**Ejemplos**:

-   `"Por"` en lugar de `"Por_Proyecto"`
-   `"En"` en lugar de `"En_Proceso"`
-   `"No"` en lugar de `"No_Asistio"`

### 5. Campos de Relación en Migraciones

**Problema**: Las migraciones incluyen campos `'belongsTo'` como strings.

**Ejemplo incorrecto**:

```php
$table->string('belongsTo'); // ❌ INCORRECTO
```

**Solución**: Remover estos campos y usar `foreignId()` correctamente.

## Correcciones Necesarias

### En el archivo draft.yaml:

✅ **CORREGIDO**: Cambié los enums para usar guiones bajos en lugar de espacios:

-   `Por Proyecto` → `Por_Proyecto`
-   `En Proceso` → `En_Proceso`
-   `En Curso` → `En_Curso`
-   `En Revision` → `En_Revision`
-   `En Progreso` → `En_Progreso`
-   `No Logrado` → `No_Logrado`
-   `No Asistio` → `No_Asistio`

### En los modelos generados:

1. **Remover campos incorrectos del fillable**:

    - Eliminar `'belongsTo'` y `'hasOne'` de todos los modelos

2. **Corregir relaciones**:

    - Cambiar `Foreign::class` por los modelos correctos
    - Ejemplo: `User::class`, `Empleado::class`, etc.

3. **Agregar imports necesarios**:
    - Importar los modelos relacionados

### En las migraciones generadas:

1. **Corregir sintaxis de Blueprint**:

    - `string('nombre', unique)` → `string('nombre')->unique()`
    - `string('descripcion', nullable)` → `string('descripcion')->nullable()`
    - `boolean('activo', default(true))` → `boolean('activo')->default(true)`

2. **Remover campos incorrectos**:

    - Eliminar `$table->string('belongsTo');`

3. **Corregir enums**:
    - Usar valores completos en lugar de truncados

## Recomendaciones

1. **Regenerar los archivos**: Después de corregir el `draft.yaml`, regenerar los modelos y migraciones usando Blueprint.

2. **Revisar manualmente**: Después de la regeneración, revisar que las relaciones y sintaxis sean correctas.

3. **Probar las migraciones**: Ejecutar las migraciones en un entorno de desarrollo para verificar que funcionen correctamente.

4. **Documentar relaciones**: Agregar comentarios en los modelos para documentar las relaciones complejas.

## Archivos que necesitan corrección manual:

1. **Modelos**:

    - `Empleado.php` - Remover `'belongsTo'` y `'hasOne'` del fillable
    - `Puesto.php` - Remover `'belongsTo'` del fillable
    - `ObjetivoDesempeno.php` - Remover `'belongsTo'` del fillable
    - `EvaluacionDesempeno.php` - Corregir relación `evaluador()`
    - `CapacitacionEmpleado.php` - Corregir relaciones `capacitacion()` y `empleado()`
    - `SolicitudVacacion.php` - Corregir relación `aprobador()`

2. **Migraciones**:
    - Todas las migraciones necesitan corrección de sintaxis
    - Remover campos `'belongsTo'` incorrectos
    - Corregir enums truncados
