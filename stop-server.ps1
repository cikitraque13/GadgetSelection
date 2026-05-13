$Port = 8000
$ProjectPath = "C:\Users\lucas\Desktop\PROYECTOS\GadgetSelection-clean"

Write-Host "Cerrando servidores PHP en puerto $Port..." -ForegroundColor Cyan

$Connections = Get-NetTCPConnection -LocalPort $Port -ErrorAction SilentlyContinue

if ($Connections) {
    $ProcIds = $Connections | Select-Object -ExpandProperty OwningProcess -Unique

    foreach ($ProcId in $ProcIds) {
        try {
            Stop-Process -Id $ProcId -Force -ErrorAction Stop
            Write-Host "Servidor detenido. PID: $ProcId" -ForegroundColor Green
        } catch {
            Write-Host "No se pudo detener PID ${ProcId}: $($_.Exception.Message)" -ForegroundColor Red
        }
    }
} else {
    Write-Host "No hay conexiones activas en puerto $Port." -ForegroundColor Yellow
}

# Limpieza extra: matar procesos php que estén ejecutándose desde este proyecto
$PhpProcesses = Get-CimInstance Win32_Process | Where-Object {
    $_.Name -like "php*" -and $_.CommandLine -like "*GadgetSelection-clean*"
}

foreach ($Php in $PhpProcesses) {
    try {
        Stop-Process -Id $Php.ProcessId -Force -ErrorAction Stop
        Write-Host "Proceso PHP detenido. PID: $($Php.ProcessId)" -ForegroundColor Green
    } catch {
        Write-Host "No se pudo detener PHP PID $($Php.ProcessId): $($_.Exception.Message)" -ForegroundColor Red
    }
}
