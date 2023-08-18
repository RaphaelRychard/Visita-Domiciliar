$(document).ready(function () {
    let buttonAdd = $("#add-button");
    let buttonRemove = $("#remove-button");
    let className = ".cargoFuncaoUser";
    let count = 0;
    let field = "";
    let maxFields = 50;

    function totalFields() {
        return $(className).length;
    }

    function addNewField() {
        count = totalFields() + 1;
        field = $("#cargoFuncaoUser").clone();
        field.attr("id", "cargoFuncaoUser-" + count);
        field.children("label").text("Field " + count);
        field.find("input").val("");
        $(className + ":last").after($(field));
    }

    function removeLastField() {
        if (totalFields() > 1) {
            $(className + ":last").remove();
        }
    }

    function enableButtonRemove() {
        if (totalFields() === 2) {
            buttonRemove.removeAttr("disabled");
            buttonRemove.addClass("shadow-sm");
        }
    }

    function disableButtonRemove() {
        if (totalFields() === 1) {
            buttonRemove.attr("disabled", "disabled");
            buttonRemove.removeClass("shadow-sm");
        }
    }

    function disableButtonAdd() {
        if (totalFields() === maxFields) {
            buttonAdd.attr("disabled", "disabled");
            buttonAdd.removeClass("shadow-sm");
        }
    }

    function enableButtonAdd() {
        if (totalFields() === (maxFields - 1)) {
            buttonAdd.removeAttr("disabled");
            buttonAdd.addClass("shadow-sm");
        }
    }

    buttonAdd.click(function () {
        addNewField();
        enableButtonRemove();
        disableButtonAdd();
    });

    buttonRemove.click(function () {
        removeLastField();
        disableButtonRemove();
        enableButtonAdd();
    });
});