// Función para obtener los valores de los inputs
function obtenerValores() {
    return {
        a1: parseFloat(document.getElementById('a1').value),
        b1: parseFloat(document.getElementById('b1').value),
        c1: parseFloat(document.getElementById('c1').value),
        a2: parseFloat(document.getElementById('a2').value),
        b2: parseFloat(document.getElementById('b2').value),
        c2: parseFloat(document.getElementById('c2').value)
    };
}

// Función para calcular los determinantes
function calcularDeterminantes(valores) {
    const { a1, b1, c1, a2, b2, c2 } = valores;
    const D = (a1 * b2) - (a2 * b1);
    const Dx = (c1 * b2) - (c2 * b1);
    const Dy = (a1 * c2) - (a2 * c1);
    return { D, Dx, Dy };
}

// Función para mostrar los resultados en la interfaz
function mostrarResultados(D, Dx, Dy, valores) {
    var resultado = document.getElementById('resultado');
    let procedimiento = "<strong>Procedimiento:</strong>";
    procedimiento += "Determinante principal D = (" + valores.a1 + " * " + valores.b2 + ") - (" + valores.a2 + " * " + valores.b1 + ") = " + D + "<br>";
    procedimiento += "Determinante Dx = (" + valores.c1 + " * " + valores.b2 + ") - (" + valores.c2 + " * " + valores.b1 + ") = " + Dx + "<br>";
    procedimiento += "Determinante Dy = (" + valores.a1 + " * " + valores.c2 + ") - (" + valores.a2 + " * " + valores.c1 + ") = " + Dy + "<br><br>";

    if (D === 0) {
        if (Dx === 0 && Dy === 0) {
            resultado.innerHTML = procedimiento + "El sistema tiene infinitas soluciones (dependiente).";
        } else {
            resultado.innerHTML = procedimiento + "El sistema no tiene solución (inconsistente).";
        }
    } else {
        var x = Dx / D;
        var y = Dy / D;
        procedimiento += "<strong>Solución:</strong>";
        procedimiento += "x = Dx / D = " + Dx + " / " + D + " = " + x.toFixed(2) + "<br>";
        procedimiento += "y = Dy / D = " + Dy + " / " + D + " = " + y.toFixed(2) + "<br>";
        resultado.innerHTML = procedimiento;
    }
}

// Función principal que coordina las operaciones
function resolverSistema() {
    const valores = obtenerValores();
    const { D, Dx, Dy } = calcularDeterminantes(valores);
    mostrarResultados(D, Dx, Dy, valores);
}
