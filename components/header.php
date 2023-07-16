<!DOCTYPE html>
<script>
    // get the localStorage if it exists, otherwise default to dark
    const setDarkMode = () => {
        let mode = localStorage.getItem('darkMode');
        if (mode === 'system') {
            localStorage.setItem('darkMode', 'dark');
        }
        return mode ? mode : 'dark';
    }
</script>
<html lang="en" x-data="{darkMode: setDarkMode()}" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" x-bind:class="{'dark': darkMode === 'dark' }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<?php include './components/navbar.php'; ?>