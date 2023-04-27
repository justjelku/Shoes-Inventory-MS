require_once __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/path/to/serviceAccountCredentials.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();