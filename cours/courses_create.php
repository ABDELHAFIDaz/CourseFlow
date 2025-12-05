<div id="courseModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('courseModal')">&times;</span>
        <h2>Create Course</h2>

        <form>
            <label>Course Title</label>
            <input type="text" placeholder="Enter course name" required>

            <label>Level</label>
            <select required>
                <option value="">Select level</option>
                <option>Beginner</option>
                <option>Intermediate</option>
                <option>Advanced</option>
            </select>

            <label>Description</label>
            <textarea placeholder="Course description"></textarea>

            <button type="submit" class="submit-btn">Save Course</button>
        </form>
    </div>
</div>