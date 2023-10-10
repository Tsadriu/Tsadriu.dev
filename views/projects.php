<?php
include './controllers/ProjectsController.php';

$controller = new ProjectsController();
$projects = $controller->getProjects();
?>
<div class="my-projects-section">
    <?php foreach ($projects as $project): ?>
        <div class="project-bubble">
            <div>
                <a href="<?php echo $project['link'] ?>" target="_blank">
                    <img class="project-bubble-img" src="<?php echo $project['image']; ?>"
                         alt="<?php echo $project['alt']; ?>">
                </a>
            </div>
            <div class="project-name">
                <?php echo strtoupper($project['name']); ?>
            </div>
            <div class="project-description">
                <?php echo $project['description']; ?>
            </div>
            Made-in:
            <div class="project-made-in">
                <?php echo implode(", ", $project['made-in']); ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>