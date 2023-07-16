<!DOCTYPE html>
<!-- Default to dark darkMode, but watch and store changes in local storage -->
<html lang="en" x-data="{
      darkMode: localStorage.getItem('darkMode')
      || localStorage.setItem('darkMode', 'dark')}" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" x-bind:class="{'dark': darkMode === 'dark' || (darkMode === 'dark' && window.matchMedia('(prefers-color-scheme: dark)').matches)}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<?php include './components/navbar.php'; ?>