function printtable()
    {
        var printContents = document.querySelector('table').outerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        window.location.reload();
    }