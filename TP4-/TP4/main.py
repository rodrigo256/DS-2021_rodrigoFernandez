from datetime import datetime
from collections import namedtuple
import random

dato = datetime.today().strftime("%Y-%m-%d %H:%M:%S")
datoParsed = dato

arrayPersonas = []
arrayEmpresas = []

empresaDato = namedtuple("empresa", ["razonSocial", "cuit", "domicilio", "localidad", "email", "telefono", "actividad"])


class persona(object):
    pass

    def __init__(self, name, surname, identification, address, phone, activity, mail, businessName, dateAuthorization, dateEntry, dateEgress, code, temperature, vehicle, placeGoing):
        self.nombre = name
        self.apellido = surname
        self.dni = identification
        self.domicilio = address
        self.telefono = phone
        self.actividad = activity
        self.email = mail
        self.empresaNombre = businessName
        self.fechaAutorizacion = dateAuthorization
        self.fechaIngreso = dateEntry
        self.fechaEgreso = dateEgress
        self.codigo = code
        self.temperatura = temperature
        self.vehiculo = vehicle
        self.lugarDestino = placeGoing



persona1 = persona("rodrigo", "fernandez", 234234, "chile 123", 1234, "educacion", "rodrigo@gmail.com", "EmpresaSrl", "30 06 2021", "","", 314, "", "31TRQ3","Sector limpieza")

persona2 = persona("lucas", "ferace", 4124, "Illia", 4312, "empleado", "feraferace@gmail.com", "EmpresaSRL",
                   "30 06 2021", "", "", 123,"","","")

persona3 = persona("carlos", "guzman", 52345, "Carlos Paz", 4562, "seguridad", "carlitox@hotmail.com", "", "", "","","","", "","")

arrayPersonas.append(persona1)
arrayPersonas.append(persona2)
arrayPersonas.append(persona3)

empresa = empresaDato("EmpresaSRL", 3456, "domicilio empresa", "localidad empresa", "emailEmpresa@gmail.com", 357645321,
                      "Agricola")

arrayEmpresas.append(empresa)


def menuEmpresa(empresaNombre):
    value = True
    while value:
        print("""        ---------------------------------------------
        || 1.Comprobar autorizacion                ||
        || 2.Mostrar lista de personas autorizadas ||
        || 3.Editar autorizacion                   ||
        || 4.Registrar ingreso                     ||
        || 5.Registrar egreso                      ||
        || 6.Salir                                 ||
        ---------------------------------------------""")

        value = input("Ingrese la opcion: ")
        if valor == "1":
            print("\nPara comprobar la autorizacion ingrese el CóDIGO: ")
            codigoIngresado = int(input())

            for j in range(len(arrayPersonas)):
                if arrayPersonas[j].codigo == codigoIngresado:
                    print(f"\nFecha actual: {datoParsed}")
                    if arrayPersonas[j].fechaAutorizacion == " " or arrayPersonas[j].fechaAutorizacion == "no autorizado" or arrayPersonas[
                        j].fechaAutorizacion == "":
                        print(f" {arrayPersonas[j].nombre} no se encuentra autorizado")
                        break

                    fechaParseada = arrayPersonas[j].fechaAutorizacion
                    if fechaParseada > dato:
                        print(f"{arrayPersonas[j].nombre} se encuentra autorizado.")
                    elif fechaParseada < dato:
                        print(f"{arrayPersonas[j].nombre} no se encuentra autorizado")
                    else:
                        print(f"{arrayPersonas[j].nombre} se encuentra autorizado")

        elif valor == "2":
            bandera = 0
            print(f"Personas autorizadas en {empresaNombre}")
            for k in range(len(arrayPersonas)):

                if arrayPersonas[k].empresaNombre.lower() == empresaNombre:
                    bandera = 1
                    print(
                        f"Nombre: {arrayPersonas[k].nombre} - Apellido: {arrayPersonas[k].apellido} - Fecha de autorizacion: {arrayPersonas[k].fechaAutorizacion} - Codigo : {arrayPersonas[k].codigo}")
            if bandera == 0:
                print(f"\nLa empresa {empresaNombre} no posee personas registradas")
        elif valor == "3":
            print("\nPara editar la autorizacion ingrese el DNI: ")
            dniIngresado2 = int(input())
            for l in range(len(arrayPersonas)):
                if arrayPersonas[l].dni == dniIngresado2:
                    print("entro")
                    if arrayPersonas[l].fechaAutorizacion != " " or arrayPersonas[l].fechaAutorizacion != "no autorizado" or arrayPersonas[
                        l].fechaAutorizacion == "":
                        print(
                            "\nIngrese 'no autorizado' para quitar la autorizacion ó la fecha en formato DD MM AAAA separadas por espacio")
                        nuevo = input()
                        arrayPersonas[l].fechaAutorizacion = nuevo
                        print(f"\nUsted ha cambiado la autorizacion del empleado {arrayPersonas[l].nombre}")
        elif valor == "4":
            bandera = 0
            codigoIngresado = int(input("\nIngrese el codigo: "))
            temperatura = int(input("\nIngrese la temperatura: "))
            for q in range(len(arrayPersonas)):
                if codigoIngresado == arrayPersonas[q].codigo:
                    bandera = 1
                    if temperatura >= 37:
                        print(f"\nEl empleado {arrayPersonas[q].nombre} {arrayPersonas[q].apellido} no está autorizado para ingresar"
                              f"\nTemperatura correcta 36° - Su temperatura: {temperatura}°")
                        arrayPersonas[q].temperatura = temperatura
                        arrayPersonas[q].fechaAutorizacion = "no autorizado"
                        break
                    else:

                        fechaI = datetime.today().strftime("%Y-%m-%d %H:%M:%S")
                        print(f"Fecha de Ingreso agregada: {fechaI}")
                        arrayPersonas[q].temperatura = temperatura
                        arrayPersonas[q].fechaIngreso = fechaI
                        print(f"\nNombre: {arrayPersonas[q].nombre}"
                              f"\nApellido: {arrayPersonas[q].apellido}"
                              f"\nFecha Ingreso: {arrayPersonas[q].fechaIngreso}"
                              f"\nTemperatura: {temperatura}")
            if bandera == 0:
                print("Codigo erroneo")

        elif valor == "5":
            bandera = 0
            print(f"\nIngrese el codigo: ")
            codigoIngresado = int(input())
            for q in range(len(arrayPersonas)):

                if codigoIngresado == arrayPersonas[q].codigo:
                    bandera = 1
                    fechaE = datetime.today().strftime("%Y-%m-%d %H:%M:%S")
                    print(f"Fecha de Ingreso agregada: {fechaE}")
                    arrayPersonas[q].fechaEgreso = fechaE
                    print(f"\nNombre: {arrayPersonas[q].nombre}"
                          f"\nApellido: {arrayPersonas[q].apellido}"
                          f"\nFecha Ingreso: {arrayPersonas[q].fechaIngreso}"
                          f"\nFecha egreso: {arrayPersonas[q].fechaEgreso}")
            if bandera == 0:
                print("Codigo erroneo")
        elif valor == "6":
            break
        elif opcion != "":
            print("\nOpcion ingresada no valida. Intente de nuevo")


class Actividad:
    empleado = 1
    otro = 2
    no_esencial = 3
    desconocido = 4


opcion = True
while opcion:
    print("""   ---------------------------------------------
   || 1.Comprobar autorizacion                ||
   || 2.Mostrar lista de personas registradas ||
   || 3.Mostrar lista de empresas registradas ||
   || 4.Registrar una nueva persona           ||
   || 5.Registrar una nueva empresa           ||
   || 6.Menu de la empresa                    ||
   || 7.Salir                                 ||
   ---------------------------------------------""")
    opcion = input("Ingrese la opcion: ")
    if opcion == "1":
        valorDni = (int(input("Ingrese el DNI: \n")))
        cont = 0
        for i in range(len(arrayPersonas)):
            if arrayPersonas[i].dni == valorDni:
                cont = cont + 1
                if arrayPersonas[i].actividad == Actividad.desconocido or arrayPersonas[
                    i].actividad == Actividad.no_esencial:
                    print(f"{arrayPersonas[i].nombre} {arrayPersonas[i].apellido} no se encuentra autorizado")
                else:
                    print(f"{arrayPersonas[i].nombre} {arrayPersonas[i].apellido} se encuentra autorizado")
        if cont == 0:
            print("El DNI ingresado no se encuentra registrado")
    elif opcion == "2":
        print("Lista de personas registradas: \n")
        print("\n   Nombre    Apellido   Actividad   Patente del vehiculo   Lugar de destino")
        print("   ------------------------------------------------------------------------\n")
        for i in range(len(arrayPersonas)):
            print(
                f"{i + 1} - {arrayPersonas[i].nombre}   {arrayPersonas[i].apellido}   {arrayPersonas[i].actividad}   {arrayPersonas[i].vehiculo}   {arrayPersonas[i].lugarDestino}\n")
    elif opcion == "3":
        print("Lista de empresas registradas: \n")
        for i in range(len(arrayEmpresas)):
            print(f"{i + 1} - {arrayEmpresas[i].razonSocial} \n")
    elif opcion == "4":
        print("\nIngrese los datos de la persona: \n")
        nombre = input("Nombre: ")
        apellido = input("\nApellido: ")
        dni = int(input("\nDni: "))
        domicilio = input("\nDomicilio: ")
        telefono = int(input("\nTelefono: "))
        email = input("\nEmail: ")
        lugarDestino = input("\nLugar destino: ")
        valor = input("¿Posee vehiculo?"
                      "-Si  --  No-")
        if valor == 'si':
            vehiculo = input("\nPatente del vehiculo: ")
        else:
            vehiculo = ""
        actividad = input("\nActividad: ")
        if actividad == 'empleado' or actividad == 'empleada':
            print("\nIngrese la fecha de autorizacion en formato DD-MM-AAAA")
            fechaAutorizacion = (input())
            print("\nIngrese la razon social de la empresa: ")
            empresaNombre = input("\nRazon social: ")

            for i in range(len(arrayEmpresas)):
                if arrayEmpresas[i].razonSocial.lower() != empresaNombre:
                    print("\nEl nombre de la empresa no está registrado")
                else:
                    codigo = random.randint(123, 641)
                    print(f"\nCódigo generado: {codigo}")

                    nuevaPersona = persona(nombre, apellido,dni,domicilio,telefono, actividad,email,empresaNombre,fechaAutorizacion,"","",codigo,"",vehiculo,lugarDestino)
                    arrayPersonas.append(nuevaPersona)
                    print("\nRegistro exitoso")
        else:
            nombreEmpresa = ""
            nuevaPersona = persona(nombre, apellido, dni, domicilio, telefono, actividad, email, nombreEmpresa, "","","","","", vehiculo,lugarDestino)
            arrayPersonas.append(nuevaPersona)

    elif opcion == "5":
        print("\nIngrese los datos de la empresa: \n")
        razonSocial = input("Razon Social: ")
        cuit = input("\nCuit: ")
        domicilio = input("\nDomicilio: ")
        localidad = input("\nLocalidad: ")
        email = input("\nEmail: ")
        telefono = int(input("\nTelefono: "))
        actividad = input("\nActividad: ")

        nuevaEmpresa = empresaDato(razonSocial, cuit, domicilio, localidad, email, telefono, actividad)
        arrayEmpresas.append(nuevaEmpresa)

    elif opcion == "6":
        razonSocial = input("\nIngrese la razon social de la empresa: ")
        for i in range(len(arrayEmpresas)):
            if arrayEmpresas[i].razonSocial.lower() == razonSocial.lower():
                print(f"                  -- Bienvenido a {arrayEmpresas[i].razonSocial} --")
                menuEmpresa(razonSocial.lower())
            else:
                print("\nLa razon social no corresponde a una empresa\n\n")
    elif opcion == "7":
        print("Has salido de la aplicacion")
        break
    elif opcion != "":
        print("\nOpcion ingresada no valida. Intente de nuevo")
