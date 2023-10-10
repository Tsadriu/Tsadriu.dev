<?php
include './controllers/SkillsController.php';

$controller = new SkillsController();
$skills = $controller->getSkills();
?>
<div class="my-skills-section">
    <?php foreach ($skills as $skill): ?>
        <div class="skill-bubble">
            <div>
                <div>
                    <a href="<?php echo $skill['link'] ?>" target="_blank">
                        <img src="<?php echo $skill['image']; ?>" alt="<?php echo $skill['alt']; ?>"
                             class="<?php echo $skill['class']; ?>">
                    </a>
                </div>
            </div>
            <div class="skill-description">
                <?php echo $skill['description']; ?>
            </div>
            Usage: <span class="skill-usage skill-usage-<?php echo strtolower($skill['usage_class']); ?>">
                        <?php echo $skill['usage']; ?>
                    </span>
        </div>
    <?php endforeach; ?>
</div>