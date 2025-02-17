$from = "moodle-theme_recit_anglais/src/*"
$to = "shared/recitfad3/theme/recit_anglais/"
$source = "./src";

try {
    . ("..\sync\watcher.ps1")
}
catch {
    Write-Host "Error while loading sync.ps1 script." 
}