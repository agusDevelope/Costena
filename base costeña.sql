
create database lacostena;
use lacostena;

create table jornada(
id_jornada int primary key,
tiempo int,
horarioE time,
horarioS time)

create table insumo(
id_insumos int primary key,
nombre_insumo varchar (100),
descripcion varchar (300),
cantidad int)

create table estado (
id_estado int primary key,
descripcion varchar(100))

create table tProveedor(
id_tprov int primary key,
descripcion varchar (100))

-------------------------------------------------------------merca------------------------
create table tipoP(
id_presentacion int primary key,
descripcion varchar (100))


create table tPubli(
id_tPubli int primary key,
descripcion varchar (100))

create table tPromo
(id_tpromo int primary key,
descripcion varchar (100))

create table tMercado(
id_tMercado int primary key,
descripcion varchar (100))

----------------------------------------------------------conta.--------------------
create table tipoCliente (
id_tCliente int primary key,
descripcion varchar (100))

create table tipoCuenta (
id_cuenta int primary key,
descripcion varchar (100))

create table bancos (
id_banco int primary key,
nombre_banco varchar(100))

create table ventas(
id_venta int primary key,
descripcion varchar (100),
fecha date,
cantidad int,
precio_unitario int,
IVA float,
precio_total float)
-----------------------------------------------------------------------logistica-----------
create table turno
(id_turno int primary key,
descripcion varchar (50))


create table area
(id_area int primary key,
descripcion varchar (50))


create table puesto
(id_puesto int primary key,
descripcion varchar (50))


create table estadoP
(id_estadoP int primary key,
descripcion varchar (50))


create table ciudad
(id_ciudad int primary key,
descripcion varchar (50))

create table municipio(
id_municipio int primary key,
descripcion varchar (50))

create table tt
(id_tipot int primary key,
descripcion varchar (50),
anio int)

create table distancia
(id_distancia int primary key,
descripcion varchar (50))

create table zona(
id_zona int primary key,
descripcion varchar (100),
estadoZona int,
ciudadZona int,
municipioZona int,
numClientes int,
clienteZona int,
constraint fk_id_estadoZona foreign key (estadoZona) references estadoP (id_estadoP),
constraint fk_id_ciudadZona foreign key (ciudadZona) references ciudad (id_ciudad),
constraint fk_id_municipioZona foreign key (municipioZona) references municipio (id_municipio),
constraint fk_id_clienteZona foreign key (clienteZona) references cliente (id_cliente))

create table ruta
(id_ruta int primary key,
nombre varchar (50),
descripcion varchar (100),
zonaRuta int,
id_distancia2 int,
nEmpleados int,
constraint fk_id_zonaRuta foreign key (zonaRuta) references zona (id_zona),
constraint fk_id_distancia foreign key (id_distancia2) references distancia (id_distancia))

create table empleado 
(id_empleado int primary key,
nombre varchar (50),
direccion varchar (50),
salario float,
id_ciudad1 int,
id_estadoP1 int,
id_area1 int,
id_puesto1 int,
id_turno1 int,
jornadaE int,
constraint fk_id_jornadaE foreign key (jornadaE) references jornada (id_jornada),
constraint fk_id_ciudad foreign key (id_ciudad1) references ciudad (id_ciudad),
constraint fk_id_estado foreign key (id_estadoP1) references estadoP (id_estadoP),
constraint fk_id_area foreign key (id_area1) references area (id_area),
constraint fk_id_puesto foreign key (id_puesto1) references puesto (id_puesto),
constraint fk_id_turno foreign key (id_turno1) references turno (id_turno))


create table transporte
(id_trasporte int primary key,
nombre varchar (50),
descripcion varchar (100),
placas varchar (50),
id_tipot1 int,
id_empleado1 int,
id_ruta1 int,
constraint fk_id_tipot foreign key (id_tipot1) references tt (id_tipot),
constraint fk_id_empleado foreign key (id_empleado1) references empleado (id_empleado),
constraint fk_id_ruta foreign key (id_ruta1) references ruta (id_ruta))



---------------------------------------------------------------------------------------conta-----------------
create table cuenta (
referencia int primary key,
saldo float,
id_banco1 int,
tipoCuenta int,
clienteCuenta int,
constraint fk_id_banci foreign key (id_banco1) references  bancos (id_banco),
constraint fk_tipocuenta foreign key (tipoCuenta) references  tipoCuenta (id_cuenta),
constraint fk_id_clienteCuenta foreign key (clienteCuenta) references cliente (id_cliente))

create table balance(
id_balance int primary key,
descripcion varchar(100),
monto int,
nVenta int,
nFactura int,
cuentaBancaria int,
compra int,
constraint fk_id_venta3 foreign key (nVenta) references ventas (id_venta),
constraint fk_id_compra foreign key (compra) references compras (id_compra),
constraint fk_nFactura foreign key (nFactura) references factura (id_factura),
constraint fk_cuentaBancaria foreign key (cuentaBancaria) references cuenta (referencia))


select * from compras
create table factura(
id_factura int primary key,
descripcion varchar (100),
fecha date,
id_producto1 int,
IVA float,
costo_total int,
id_cliente1 int,
id_venta1 int,
constraint fk_id_cliente foreign key (id_cliente1) references cliente (id_cliente),
constraint fk_id_venta foreign key (id_venta1) references ventas (id_venta))

create table cliente(
id_cliente int primary key,
nombre_cliente varchar (100),
id_estadoP2 int,
ciudadCliente int,
id_tCliente1 int,
constraint fk_id_tCliente foreign key (id_tCliente1) references tipoCliente (id_tCliente),
constraint fk_id_estadoP foreign key (id_estadoP2) references estadoP (id_estadoP),
constraint fk_id_ciudadCliente foreign key (ciudadCliente) references ciudad (id_ciudad))
----------------------------------------------------------------------------merca-----------------------------------

create table producto(
id_producto int primary key,
nombre_producto varchar (100),
descripcion varchar (300),
id_presentacion1 int,
costo float,
precio float,
constraint fk_id_presentacion1 foreign key (id_presentacion1) references tipoP (id_presentacion))

create table publicidad(
id_publicidad int primary key,
descripcion varchar (100),
tPubli1 int,
fecha_emi date,
fecha_term date,
costo float,
productoPubli int,
constraint fk_id_tPubli1 foreign key (tPubli1) references  tPubli (id_tPubli),
constraint fk_productoPubli foreign key (productoPubli) references producto (id_producto))

create table promocion(
id_promo int primary key,
fechaIni date,
fechaTer date,
tipoPromo int,
productoPromo int,
clientePromo int,
constraint fk_clientePromo foreign key (clientePromo) references cliente (id_cliente),
constraint fk_id_producto foreign key (productoPromo) references producto (id_producto),
constraint fk_id_tp foreign key (tipoPromo) references  tPromo (id_tPromo))


create table eMercado(
id_estudio int primary key,
nombre_estudio varchar (100),
tMercado1 int,
fecha_Inicio date,
fecha_termino date,
productoMercado int,
zonaMercado int,
constraint fk_productoMercado foreign key (productoMercado) references producto (id_producto),
constraint fk_zonaMercado foreign key (zonaMercado) references zona (id_zona),
constraint fk_tM foreign key (tMercado1) references tMercado (id_tMercado))

create table pedidos(
id_pedido int primary key,
descricion varchar (200),
estadoPedido int,
productoPedido int,
clientePedido int,
cantidad int,
unimed int,
fechae date,
fechac date, 
costot int,
constraint fk_id_estadoPedido foreign key (estadoPedido) references estado (id_estado),
constraint fk_id_productoPedido foreign key (productoPedido) references producto (id_producto),
constraint fk_id_clientePedido foreign key (clientePedido) references cliente (id_cliente))

create table produccion(
id_produccion int primary key,
descripcion varchar (100),
productoProduc int,
insumoProduccion int,
cantidad int,
fecha_in date,
fecha_ter date,
num_empleados int,
constraint fk_id_productoProduc foreign key (productoProduc) references producto (id_producto),
constraint fk_id_insumoProduccion foreign key (insumoProduccion) references insumo (id_insumos))


create table proveedores (
id_proveedor int primary key ,
nombreProvedor varchar (100),
tipoProvedor int,
areaProve int,
contacto varchar (100),
telefono int,
constraint fk_id_tipoProvedor foreign key (tipoProvedor) references tProveedor (id_tprov),
constraint fk_id_areaProve foreign key (areaProve) references area (id_area))


create table almacen (
id_almacen int primary key, 
nombre varchar (100),
ubicacion varchar (100),
empleadoAl int,
productoAl int,
cantidad int,
constraint fk_id_empleadoAl foreign key (empleadoAl) references empleado (id_empleado),
constraint fk_id_productoAL foreign key (productoAl) references producto (id_producto))



create table distribucion (
id_distribucion int primary key,
descripcion varchar (100),
clienteDis int,
rutaDis int,
transporteDis int,
choferDis int,
productoDis int,
cantidad int,
constraint fk_id_clienteDis foreign key (clienteDis) references cliente (id_cliente),
constraint fk_id_rutaDis foreign key (rutaDis) references ruta (id_ruta),
constraint fk_id_transporteDis foreign key (transporteDis) references transporte (id_trasporte),
constraint fk_id_empleadoDis foreign key (choferDis) references empleado (id_empleado),
constraint fk_id_productoDis foreign key (productoDis) references producto (id_producto))

create table planeacion(
id_plan int primary key,
descripcion varchar (100),
demandaPedido int,
prodElaborado1 int,
prodDist1 int,
disPlaneada int,
constraint fk_id_disPlaneada foreign key (disPlaneada) references distribucion (id_distribucion),
constraint fk_id_prodElaborado1 foreign key (prodElaborado1) references prodElaborado(id_prodEla),
constraint fk_id_prodDist1 foreign key (prodDist1) references prodDist (id_prodDist))

create table compras (
id_compra int primary key, 
descripcion varchar (100),
cantidad int,
precio int,
areaCompra int
constraint fk_id_areaCompra foreign key (areaCompra) references area (id_area))

create table nomima(
id_nomina int primary key,
descripcion varchar (100),
primaVacacional int,
sueldoDia int,
seguro int,
impuesto float,
empNomina int,
constraint fk_id_empNomina foreign key (empNomina) references empleado (id_empleado))

create table prodElaborado(
id_prodEla int primary key,
descripcion varchar (100),
pElaborado int,
fechaElaboracion date,
cantidad int,
precio int,
constraint fk_id_pElaborado foreign key (pElaborado) references producto (id_producto))

create table prodDist(
id_prodDist int primary key,
descripcion varchar (100),
pDis int,
fechaDistribucion date,
cantidad int,
precio int,
constraint fk_id_pDis foreign key (pDis) references producto (id_producto)) 