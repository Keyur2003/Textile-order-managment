$("#rcatalog").validate({
    rules: {
        name: {
            required: true,
        },
        date: {
            required: true,
        },
        file: {
            required: true,
        },
    }
});