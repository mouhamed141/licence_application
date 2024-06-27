@extends('./layouts.index')

@section('content')
<div class="user-list-container">
    <div class="user-list-header">
        <h2>Liste des demandes</h2>
        <button class="add-user-btn"><i class='bx bx-plus'></i> Ajouter une demande</button>
    </div>
    <div class="table-responsive">
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Rôle</th>
                    <th>Statut</th>
                    <th>Statut</th>
                    <th>Statut</th>
                    <th>Statut</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>lamine</td>
                    <td>lamine@example.com</td>
                    <td>Administrateur</td>
                    <td>Administrateur</td>
                    <td>Administrateur</td>
                    <td>Administrateur</td>
                    <td>Utilisateur</td>
                    <td><span class="status active">Actif</span></td>
                    <td>
                        <button class="action-btn edit"><i class='bx bx-edit-alt'></i></button>
                        <button class="action-btn delete"><i class='bx bx-trash'></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>fallou</td>
                    <td>fallou@example.com</td>
                    <td>Utilisateur</td>
                    <td>Utilisateur</td>
                    <td>Utilisateur</td>
                    <td>Utilisateur</td>
                    <td>Utilisateur</td>
                    <td><span class="status inactive">Inactif</span></td>
                    <td>
                        <button class="action-btn edit"><i class='bx bx-edit-alt'></i></button>
                        <button class="action-btn delete"><i class='bx bx-trash'></i></button>
                    </td>
                </tr>
                <!-- Ajoutez d'autres lignes d'exemple ici -->
            </tbody>
        </table>
    </div>
</div>
@endsection
