namespace App\Services;

use App\Models\User;

class UserService {
    protected $userModel;

    public function __construct(User $userModel) {
        $this->userModel = $userModel;
    }

    public function listUsers() {
        return $this->userModel->all(); // Fetch users from the database
    }
}
