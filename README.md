# CRUD With Query Builder DB Facades

## Create
```php
DB::table('students')->insert(array(
    'name' => $request->name,
    'faculty' => $request->faculty,
    'major' => $request->major,
    'created_at' => now(),
    'updated_at' => now(),
));
```

## Read
```php
$student = DB::table('students')->where('id', $id)->first();
```

## Update
```php
DB::table('students')->where('id', $id)->limit(1)->update(array(
    'name' => $request->name,
    'faculty' => $request->faculty,
    'major' => $request->major,
    'updated_at' => now(),
));
```

## Delete
```php
DB::table('students')->where('id', $id)->limit(1)->delete();
```

## Documentation
- [Laravel Documentation](https://laravel.com/docs/10.x/queries)
