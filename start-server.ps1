Set-Location "C:\Users\lucas\Desktop\PROYECTOS\GadgetSelection-clean"

$Port = 8000

Write-Host "Cerrando cualquier servidor anterior en puerto $Port..." -ForegroundColor Yellow

$Connections = Get-NetTCPConnection -LocalPort $Port -ErrorAction SilentlyContinue

if ($Connections) {
    $Pids = $Connections | Select-Object -ExpandProperty OwningProcess -Unique

    foreach ($Pid in $Pids) {
        try {
            Stop-Process -Id $Pid -Force -ErrorAction SilentlyContinue
            Write-Host "Cerrado PID: $Pid" -ForegroundColor Yellow
        } catch {}
    }
}

Start-Sleep -Milliseconds 700

Write-Host "Arrancando GadgetSelection en http://localhost:$Port" -ForegroundColor Green
Write-Host "No cierres esta ventana mientras estés probando la web." -ForegroundColor Cyan

php -S localhost:$Port router.php

Pause
