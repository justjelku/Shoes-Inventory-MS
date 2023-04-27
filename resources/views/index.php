require_once __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . 'C:\xampp\htdocs\shoes-inventory-management-system\my-anonymity-app-firebase-adminsdk-2iepb-61b6360c7b.json');

// Initialize Firebase
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

// Access Firebase services
$database = $firebase->getDatabase();
$auth = $firebase->getAuth();
// ...

// Initialize the Firebase Authentication service
$auth = $firebase->getAuth();

// Sign in with email and password
$email = 'user@example.com';
$password = 'password123';
$user = $auth->signInWithEmailAndPassword($email, $password);

// Access the Firestore database
$firestore = $firebase->getFirestore();

// Get the reference to the users collection
$usersRef = $firestore->collection('users');

// Get the reference to the admin_user subcollection for the authenticated user
$adminUserRef = $usersRef->document($user->uid)->collection('admin_user');

// Get the reference to the basic_user subcollection for the authenticated user
$basicUserRef = $usersRef->document($user->uid)->collection('basic_user');

// Read data from the admin_user subcollection
$adminUserSnapshot = $adminUserRef->document('admin')->snapshot();
if ($adminUserSnapshot->exists()) {
    $adminData = $adminUserSnapshot->data();
    // Do something with the admin data
}

// Read data from the basic_user subcollection
$basicUserSnapshot = $basicUserRef->document('basic')->snapshot();
if ($basicUserSnapshot->exists()) {
    $basicData = $basicUserSnapshot->data();
    // Do something with the basic data
}