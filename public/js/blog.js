tinymce.init({
    selector: '#editor'
});

var picker = new Pikaday({ 
    field: document.getElementById('datepicker'), 
    format: 'YYYY-MM-DD'

}); // ver pikaday no GITHUB 

/*let picker = new Pikaday({
    field: document.getElementById('datepicker'),
    format: 'YYYY-MM-DD',
    i18n: {
        previousMonth : 'Previous Month',
        nextMonth     : 'Next Month',
        months        : 'Janeiro_Fevereiro_Março_Abril_Maio_Junho_Julho_Agosto_Setembro_Outubro_Novembro_Dezembro'.split('_'),
        weekdays      : 'Domingo_Segunda-Feira_Terça-Feira_Quarta-Feira_Quinta-Feira_Sexta-Feira_Sábado'.split('_'),
        weekdaysShort : 'Dom_Seg_Ter_Qua_Qui_Sex_Sáb'.split('_'),
    },
});

Esta foi a solução do Vagner. Uma pequena alteração.

*/ 


// {nome: 'Pedro'} - JS
// ['nome' => 'Pedro'] - PHP