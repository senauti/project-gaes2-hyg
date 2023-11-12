# Generated by Django 4.2.7 on 2023-11-12 02:02

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Category',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=255)),
                ('description', models.TextField(blank=True, null=True)),
            ],
            options={
                'verbose_name': 'Categoria',
                'verbose_name_plural': 'Categorias',
                'db_table': 'Categoria',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Gastos',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('description', models.CharField(max_length=255, null=True)),
                ('date', models.DateField(null=True)),
                ('price', models.IntegerField()),
            ],
            options={
                'verbose_name': 'gasto',
                'verbose_name_plural': 'gastos',
                'db_table': 'gastos',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Suppliers',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('email', models.CharField(blank=True, max_length=255, null=True)),
                ('name', models.CharField(blank=True, max_length=255, null=True)),
                ('phone', models.CharField(blank=True, max_length=255, null=True)),
            ],
            options={
                'verbose_name': 'proveedor',
                'verbose_name_plural': 'proveedores',
                'db_table': 'proveedor',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Products',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('price', models.IntegerField()),
                ('code', models.CharField(max_length=255, null=True)),
                ('amount', models.FloatField(null=True)),
                ('name', models.CharField(max_length=255, null=True)),
                ('category', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='hyg.category')),
            ],
            options={
                'verbose_name': 'Producto',
                'verbose_name_plural': 'Productos',
                'db_table': 'Producto',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Compra',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('description', models.CharField(max_length=255, null=True)),
                ('amountc', models.IntegerField()),
                ('datec', models.DateField(blank=True, null=True)),
                ('pricec', models.IntegerField()),
                ('productc', models.CharField(blank=True, max_length=255, null=True)),
                ('product', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='hyg.products')),
                ('supplier', models.ForeignKey(null=True, on_delete=django.db.models.deletion.SET_NULL, to='hyg.suppliers')),
            ],
            options={
                'verbose_name': 'compra',
                'verbose_name_plural': 'compras',
                'db_table': 'compras',
                'ordering': ['id'],
            },
        ),
    ]
